@if(session()->has('message'))
<div
    x-data="{show: true}"
    x-init="setTimeout(() => show = false, 3000)"
    x-show="show"
    class="position-absolute top-0 start-0 top-0 transform p-4"
    style="background-color: red"
>
    <p>
        {{ session("message") }}
    </p>
</div>
@endif
