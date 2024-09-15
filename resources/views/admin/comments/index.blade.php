@extends('layouts.admin')

@section('page.title', 'Список комментарий')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список комментарий</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('comment.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить комментарий</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        @include('includes.message')

        <table class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название категории</th>
                <th scope="col">Имя пользователя</th>
                <th scope="col">Тема урока</th>
                <th scope="col">Комментарий</th>
                <th scope="col">Дата добавления</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>

            @forelse($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->categoryTitle }}</td>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->title }}</td>
                    <td>{{ $comment->message }}</td>
                    <td>{{ $comment->created_at }}</td>
                    <td>
                        <a href="{{ route('comment.edit', ['comment' => $comment->id]) }}">
                            Edit</a> &nbsp;
                        <a href="javascript:;" class="delete" rel="{{  $comment->id }}">
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
                        send(`/admin/comment/${id}`).then( () => {
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
