<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Software Engineer"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="RM6000"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Subang Jaya"></x-forms.input>

        <x-forms.select label="Mode" name="mode">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://www.ipgmediabrands.com/"></x-forms.input>
        <x-forms.checkbox label="Featured (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags"
            placeholder="frontend, backend, fullstack"></x-forms.input>

        <x-forms.button type="submit">Create Job</x-forms.button>
    </x-forms.form>
</x-layout>
