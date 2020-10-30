    <x-dashboard>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <livewire:chart-tile chartClass="{{App\Charts\ExampleChart::class}}" position="a1:a4"/>
        <livewire:chart-tile chartClass="{{App\Charts\ExampleChart::class}}" position="b1:b3"/>
        <livewire:chart-tile chartClass="{{App\Charts\ExampleChart::class}}" position="c1:c3"/>
        <livewire:chart-tile chartClass="{{App\Charts\ExampleChart::class}}" position="d1:d3"/>

    </x-dashboard>

