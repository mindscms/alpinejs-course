<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-300 text-gray-700">
<div class="container mx-auto max-w-sm px-4 my-4" x-data="todos()">

    <div class="bg-white shadow-md rounded px-6 py-4">
        <h2 class="text-2xl font-bold">Todo Application</h2>

        <div class="mt-4 mb-6">
            <input
                type="text"
                class="shadow w-full p-2 border"
                x-model="todoTitle"
                @keydown.enter="addTodo()"
            >
        </div>

        <ul class="mb-6">
            <template x-for="todo in todos" :key="todo.id">

                <li class="flex items-center justify-between mt-4">
                    <div class="flex items-center" :class="{ 'line-through' : todo.isComplete }">
                        <input type="checkbox" x-model="todo.isComplete">
                        <div class="ml-3" x-text="todo.title"></div>
                    </div>
                    <button class="text-xl ml-2" @click="deleteTodo(todo.id)">&times;</button>
                </li>

            </template>

            {{--
            <li class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <input type="checkbox">
                    <div class="ml-3">Second todos task</div>
                </div>
                <button class="text-xl ml-2">&times;</button>
            </li>

            <li class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <input type="checkbox">
                    <div class="ml-3 line-through">Third todos task</div>
                </div>
                <button class="text-xl ml-2">&times;</button>
            </li>
            --}}

        </ul>
    </div>

</div>
<script>
    function todos() {
        return {
            todos: [{
                id: 1,
                title: 'First todo task',
                isComplete: false,
            }],
            todoId: 2,
            todoTitle: '',
            addTodo() {
                if (this.todoTitle.trim() === '') {
                    return;
                }

                this.todos.push({
                    id: this.todoId,
                    title: this.todoTitle,
                    isComplete: false,
                })

                this.todoId++;
                this.todoTitle = '';

            },

            deleteTodo(id) {
                this.todos = this.todos.filter(todo => id !== todo.id);
            }
        }

    }
</script>

</body>
</html>
