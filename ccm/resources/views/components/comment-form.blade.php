@props(['blog'])
<x-card-wrapper>
    <form action="/blogs/{{$blog->slug}}/comments" method="POST">
      @csrf
      <div class="form-group">

       <textarea class="form-control border border-0" name="body" id="" cols="10" rows="5" placeholder="say something..."></textarea>

       <x-error name="body" />

      </div>
      
     <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-primary mt-2" >Submit</button>
     </div>

    </form>
  </x-card-wrapper>