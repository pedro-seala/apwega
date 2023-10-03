<x-app-layout>
    @include('config.schoolPlan.partials.get')

    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-solid fa-chalkboard"></i>
                <span>{{ __('School plan') }}</span>
            </h1>

            <x-add-btn :href="route('school-plans.create')" />
        </x-slot>

        <x-slot name="content">
            @if(isset($schoolPlan) && $schoolPlan->count())
                <x-table.light>
                    <x-slot name="thead">
                        <tr class="sticky top-0">
                            <th>
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Disciplina
                            </th>

                            <th>
                                <i class="fa-regular fa-circle"></i>
                                Categoria
                            </th>

                            <th>
                                <i class="fa-regular fa-clock"></i>
                                Carga horária
                            </th>

                            <th>
                                <i class="fa-solid fa-cog"></i>
                                Opções
                            </th>
                        </tr>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach ($schoolPlan as $plan)
                            <tr class="tbody-row">
                                <td>
                                    {{ $plan->school_subject->name }}
                                </td>

                                <td class="hsm text-center">
                                    {{ $plan->subject_category->name }}
                                </td>

                                <td class="hsm text-center">
                                    {{ $plan->time }}
                                </td>

                                <td class="cog">
                                    <x-table.edit-btn
                                        :href="route('school-plans.edit', $plan)" />

                                    <x-table.del-btn
                                        :action="route('school-plans.destroy', $plan)" />

                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table.light>
            @else
                <x-table.alert-info />
            @endisset
        </x-slot>

    </x-layouts.card>
</x-app-layout>
