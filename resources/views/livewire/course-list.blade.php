<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        {{-- El componente course-card, se le pasa como parametro la variable curso --}}
        <x-course-card :course="$course" />
    @endforeach
</div>
