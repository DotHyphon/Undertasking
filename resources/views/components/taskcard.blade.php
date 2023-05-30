@props(['task'])

<a href="/tasks/{{$task->id}}" class="flex flex-col h-24 rounded overflow-hidden shadow-lg border p-2 my-2 relative">
    @if ($task->completed)
    <i class="fas fa-check-circle absolute top-0 right-0 m-2 text-blue-300"></i>
    @endif
    <div>{{$task->title}}</div>
    <div class="text-right text-gray-500 text-sm mt-auto">Due: {{ date('d/m H:i', strtotime($task->due_date))}}</div>
</a>