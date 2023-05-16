@props(['task'])

<div class="flex flex-col h-24 rounded overflow-hidden shadow-lg p-2">
    <div>{{$task->title}}</div>
    <div class="text-right text-gray-500 text-sm mt-auto">Due: {{ date('d/m H:i', strtotime($task->due_date))}}</div>
</div>