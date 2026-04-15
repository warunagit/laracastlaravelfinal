<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" section="/jobs">

        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Wellawatte, Colombo"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="http://www.helloceylon.com"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Tags(Comma seperated)" name="tags" placeholder="srilanka, travel, mountain"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
