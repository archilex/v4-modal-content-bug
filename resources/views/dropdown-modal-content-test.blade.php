<div style="display:flex; width:100%; justify-content:space-between; align-items:center;">
    @php
        $actions = [
            $this->testDropdownAction,
        ];
    @endphp
    <div>Label</div>
    <x-filament-actions::group 
        :actions="$actions"
        label="Actions"
        icon="heroicon-m-ellipsis-vertical"
        color="primary"
        size="md"
        dropdown-placement="bottom-end"
    />
</div>