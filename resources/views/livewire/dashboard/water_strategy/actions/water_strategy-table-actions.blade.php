<div class="flex justify-end items-center space-x-2">
    <a href="{{ route('dashboard.water.delete', [ 'community_id' => $community_id, 'id' => $id ]) }}" class="mr-1 hover:text-project-error"><x-icons.delete-trash></x-icons.delete-trash></a>
    <a href="{{route('dashboard.programs.create-and-edit', ['community_id' => $community_id, 'id' => $id])}}" class="mr-1 hover:text-project-icon-hover disabled"><x-icons.edit-pencil></x-icons.edit-pencil></a>
</div>