@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-slate-700 text-slate-300 border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm']) !!}>
