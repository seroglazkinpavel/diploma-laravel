@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список задач для практике</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('practices.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить задачу</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        @include('includes.message')
        <table class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название урока</th>
                <th scope="col">Задачи</th>
                <th scope="col">Изображение</th>
                <th scope="col">Решение</th>
                <th scope="col">Дата добавления</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($practices as $practice)
                <tr>
                    <td>{{ $practice->id }}</td>
                    <td>{{ $practice->post->title }}</td>
                    <td>{{ $practice->homework }}</td>
                    <td>{{ $practice->image }}</td>
                    <td>{{ $practice->decision }}</td>
                    <td>{{ $practice->created_at }}</td>
                    <td>
                        <a href="{{ route('practices.edit', ['practice' => $practice]) }}">
                            Edit</a> &nbsp;
                        <a href="javascript:;" class="delete" rel="{{ $practice->id }}">
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
            let filter = document.getElementById("filter");
            filter.addEventListener("change", function (event) {
                location.href = "?f=" + this.value;
            });

            let elements = document.querySelectorAll(".delete");
            elements.forEach(function (element, key) {
                element.addEventListener('click', function() {
                    const id = this.getAttribute('rel');
                    if (confirm(`Подтверждаете удаление записи с #ID = ${id}`)) {
                        send(`/admin/news/${id}`).then( () => {
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
