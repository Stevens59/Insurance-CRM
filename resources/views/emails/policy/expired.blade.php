@component('mail::message')
# Introduction

The policy has expired {{ $lasts }}.

@component('mail::button', ['url' => '/admin/login'])
VIEW
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
