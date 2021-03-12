@if (
    $rolehapermission->trashed()
)
    <x-utils.form-button
        :action="route('admin.rolehapermission.restore', $rolehapermission)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    <x-utils.delete-button
        :href="route('admin.rolehapermission.permanently-delete', $rolehapermission)"
        :text="__('Permanently Delete')"/>
@else
    <x-utils.view-button :href="route('admin.rolehapermission.show', $rolehapermission)"/>
    <x-utils.edit-button :href="route('admin.rolehapermission.edit', $rolehapermission)"/>
    <x-utils.delete-button :href="route('admin.rolehapermission.destroy', $rolehapermission)"/>
@endif