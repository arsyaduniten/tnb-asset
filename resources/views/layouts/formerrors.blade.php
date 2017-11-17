@if ($errors->any())
     <ul>
     @foreach ($errors->all() as $error)
       <div class="section red"><li><i class="material-icons">warning</i> {{ $error }}</li></div>
     @endforeach
     </ul>
@endif