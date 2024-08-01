@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-slate-900 text-slate-300 border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm']) !!}>{{ $slot }}</textarea>
