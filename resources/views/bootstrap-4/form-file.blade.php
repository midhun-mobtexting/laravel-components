<div class="form-group">
    <x-form-label :label="$label" :for="$attributes->get('id') ?: $id()" />

    <input name="{{ $name }}" type="file" {!! $attributes->merge(['data-filepond' => 'true', 'accept' => $accept]) !!}>
    @if($hasErrorAndShow($name))
    <x-form-errors :name="$name" />
    @endif
    {!! $help ?? null !!}
</div>
