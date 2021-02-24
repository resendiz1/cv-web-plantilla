@if (session('status'))
<div class="alert alert-success animated fadeIn text-center border-2" > <strong>{{session('status')}}</strong></div>

@endif