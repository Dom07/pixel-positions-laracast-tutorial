<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90,0000" />
        <x-forms.input label="Location" name="location" placeholder="Manhattan, New York"/>
        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="https://github.com"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>
        <x-forms.divider/>
        <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="laracast, racing, motorsports"/>
        <x-forms.button type="submit">Create</x-forms.button>
    </x-forms.form>
</x-layout>