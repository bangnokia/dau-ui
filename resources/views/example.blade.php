<div class="mx-auto bg-white flex items-center justify-center">
    <form class="w-[500px] p-6 flex flex-col gap-6">
        <x-d::form-group label="Name" error="Your name is soooooooo weak">
            <x-d::input/>
        </x-d::form-group>

        <x-d::form-group label="Email">
            <x-d::input type="email"/>
        </x-d::form-group>

        <x-d::form-group label="Description">
            <x-d::textarea/>
        </x-d::form-group>

        <x-d::form-group label="Your resume">
            <x-d::file/>
        </x-d::form-group>

        <x-d::form-group label="Your role">
            <x-d::select
                :options="['Admin', 'User', 'Senior', 'Pro']"
                placeholder="Please select your role"
            />
        </x-d::form-group>

        <x-d::form-group label="Checkboxes">
            <div class="flex gap-4">
                <x-d::checkbox label="PHP"/>
                <x-d::checkbox label="Javascript"/>
                <x-d::checkbox label="Rust"/>
                <x-d::checkbox label="Svelte"/>
            </div>
        </x-d::form-group>

        <x-d::form-group label="Radio">
            <div class="flex gap-4">
                <x-d::radio label="PHP" name="program-language"/>
                <x-d::radio label="Swift" name="program-language"/>
                <x-d::radio label="Rust" name="program-language"/>
                <x-d::radio label="C++" name="program-language"/>
            </div>
        </x-d::form-group>

        <x-d::form-group label="Radio group">
            <x-d::radio-group class="flex gap-2" name="programing_language" :options="[
                'laravel' => 'Laravel',
                'sym' => 'Symfony',
                'r' => 'Rust',
                'tw' => 'Tailwind CSS'
            ]" selected="r"/>
        </x-d::form-group>

    </form>
</div>
