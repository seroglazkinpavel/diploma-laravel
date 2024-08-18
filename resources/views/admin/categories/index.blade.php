@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список категорий</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="{{ route('categories.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить категорию</a>
            </div>
        </div>
    </div>
        <div class="table-responsive">
            @include('includes.message')
{{--            <select id="filter">--}}
{{--                <option>selected</option>--}}
{{--                <option>--}}
{{--                    {{ \App\Enums\Posts\Status::DRAFT }}--}}
{{--                </option>--}}
{{--                <option>--}}
{{--                    {{ \App\Enums\Posts\Status::ACTIVE }}--}}
{{--                </option>--}}
{{--                <option>--}}
{{--                    {{ \App\Enums\Posts\Status::BLOCKED }}--}}
{{--                </option>--}}
{{--            </select>--}}
            <table class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Краткая информация</th>
                    <th scope="col">Картинка</th>
{{--                    <th scope="col">Статус</th>--}}
                    <th scope="col">Дата добавления</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categoriesList as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->information }}</td>
                        <td>{{ $category->image }}</td>
{{--                        <td>{{ $category->status }}</td>--}}
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <a href="{{ route('categories.edit', ['category' => $category]) }}">
                                Edit</a> &nbsp;
                            <a href="javascript:;" class="delete" rel="{{ $category->id }}">
                                Delete
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Записей не найдено!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
@endsection
@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // let filter = document.getElementById("filter");
            // filter.addEventListener("change", function (event) {
            //     location.href = "?f=" + this.value;
            // });

            let elements = document.querySelectorAll(".delete");
            elements.forEach(function (element, key) {
                element.addEventListener('click', function() {
                    const id = this.getAttribute('rel');
                    if (confirm(`Подтверждаете удаление записи с #ID = ${id}`)) {
                        send(`/admin/categories/${id}`).then( () => {
                            location.reload();
                        });
                    } else {
                        alert("Вы отменили удаление записи");
                    }
                });
            });
        });
        async function send(url) {
            let response = await fetch (url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            let result = await response.json();
            return result.ok;
        }
    </script>
@endpush
