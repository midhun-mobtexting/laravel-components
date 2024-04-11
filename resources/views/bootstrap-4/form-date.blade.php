<div class="@if ($type === 'hidden') d-none @else form-group @endif">
    <x-form-label :label="$label" :for="$attributes->get('id') ?: $id()" />

    <div class="input-group input-icon">

        <input {!! $attributes->merge(['class' => 'form-control ' . ($hasError($name) ? 'is-invalid' : '')]) !!} type="{{ $type }}"
        @if ($isWired()) wire:model{!! $wireModifier() !!}="{{ $name }}"
        @else
        value="{{ $value }}" @endif
        name="{{ $name }}" @if ($label && !$attributes->get('id')) id="{{ $id() }}" @endif placeholder="{{ $attributes->hasAny(['data-daterange','data-dateranges','data-dateranges-report']) ? 'Select Date Range' : ' Select Date' }}" />

        @if($attributes->has('icon'))
            <span class="input-icon-addon">
                <i class="{{ $attributes->get('icon') }}"></i>
            </span>
        @else
            <span class="input-icon-addon">
                <i class="ti ti-calendar-month"></i>
            </span>
        @endif

        @if ($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
        @endif
    </div>

    {!! $help ?? null !!}

</div>