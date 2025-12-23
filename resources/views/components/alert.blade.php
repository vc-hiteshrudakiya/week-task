<div {{$attributes->merge(['class'=>'alert alert-'.$type, 'role'=>$attributes->prepends('alert')])}} ">
  {{$message}}
</div>