<x-app-layout>
    <x-slot name="header">
        <h2>{{ __('Dashboard') }}</h2>
    </x-slot>

    <p>You're logged in!</p>
    <p>Here are some form elements to copy/paste and build your thing.</p>
    <label for="s1" class="select">
        <span>Select an option</span>
        <select id="s1">
            <option>Choose option</option>
            <option value="Option 1">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
        </select>
    </label>
    <label for="r1" class="toggle">
        <input id="r1" type="radio" name="user_type" value="1" required>
        <span>{{ __('Business') }}</span>
    </label>
    <label for="r2" class="toggle">
        <input id="r2" type="radio" name="user_type" value="2">
        <span>{{ __('Customer') }}</span>
    </label>

</x-app-layout>
