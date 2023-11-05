<div wire:ignore.self data-bs-backdrop="static" class="modal fade" id="sub-category{{$category->id}}"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
        <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    {{$this->category_name .' Sub-Categories'}}
                </h1>
                <button type="button" data-bs-dismiss="modal">
                    <i class="bi-x" style="font-size: 1em"></i>
                </button>
              </div>
              <div class="modal-body">
                @if(isset($this->sub_cat_list))
                <div class="row">
                    @foreach($this->sub_cat_list as $sub)
                        <div class="col-md-3 ">
                            <div class="card ">
                                <a href="{{route('sub-product',$sub->id)}}" class="d-flex justify-content-center">
                                    {{$sub->name}}    
                                </a>
                            </div>
                        </div>
                     @endforeach
                </div>
                @endif
              </div>
        </div>
    </div>
    <script type="text/javascript">
          window.livewire.on('close_ot_book', () => {
              $('#editBook}}').modal('hide');
          });
    </script>
</div>  