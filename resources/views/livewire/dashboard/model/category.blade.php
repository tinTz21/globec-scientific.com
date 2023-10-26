<div wire:ignore.self data-bs-backdrop="static" class="modal fade" id="allBibleBooks"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Categories
                </h1>
                <button type="button" data-bs-dismiss="modal">
                    <i class="bi-x" style="font-size: 1em"></i>
                </button>
              </div>
              <div class="modal-body">

                @if($this->open_category_input == '0')
                <div class="col-md-12">
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-3 ">
                            <a class=" btn btn-outline-secondary" style="text-decoration-color: black;" wire:click="openCategoryInput(1)">
                                Add New
                            </a>    
                        </div>
                    </div>
                    <br>
                    
                    @foreach($categories as $category)
                        <div class="row ">
                            <div class="col-md-5">
                                <a>
                                  <i class="bi-dot"></i>  
                                  {{ Illuminate\Support\Str::limit($category->name, 20) }}
                                </a> 
                            </div>
                        
                            <div class="col-md-6 ">
                                <div class="row ">
                                    <div class="col-md-2 border">
                                        <a wire:click="editCategory({{$category->id}})" style="cursor: pointer;">
                                            <i class="bi-pencil"></i>
                                        </a> 
                                    </div>
                                    <div class="col-md-2 border">
                                        <a wire:click="deleteCategory({{$category->id}})" style="cursor: pointer;">
                                            <i class="bi-trash text-danger"></i>
                                        </a>
                                    </div>  
                                    <div class="col-md-6 border">
                                           <small wire:click="openSubCategory({{$category->id}})" style="cursor: pointer;">
                                                + sub-category
                                           </small>
                                    </div> 
                                    <!-- <div wire:loading wire:click="deleteCategory({{$category->id}})">
                                        <i>Deleting...</i>
                                    </div>  -->                                 
                                </div>
                            </div> 
                        </div>
                        <br>
                    @endforeach
                    <div class="container-fluid">
                        {{$categories->links()}}
                    </div>
                </div>
                @elseif($this->open_category_input == '1')
                    <form wire:submit.prevent="addCategory">
                        <div class="col-md-12">
                            <label>Add New Category</label>
                            <input type="text" wire:model="category_name" class="form-control" placeholder="Type here...">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-secondary">
                            Save
                        </button>
                        <div wire:loading wire:submit="addCategory">
                            Please wait...
                        </div>
                    </form>
                @elseif($this->open_category_input == '3')
                @if($this->openSubCategoryInput=='0')
                    <div class="col-md-12">
                        
                        <div class="col-md-12 d-flex justify-content-end">
                            <a class="btn btn-outline-primary" wire:click="resetBack">
                                Back
                            </a>
                            <a class="btn btn-outline-secondary" wire:click="openSubCategoryInput">
                                Add New Sub-Category
                            </a>
                        </div>
                       
                        {{Illuminate\Support\Str::limit($this->category_name,20)}} Categories <hr>
                        @foreach($this->sub_cat_list as $list)
                            {{$list->name}}
                            {{-- <a class="text-danger" wire:click="deleteSubCategory({{$list->id}})" style="cursor:pointer;">
                                <i class="bi-trash"></i>
                            </a> --}}
                            <a class="text-danger" wire:click="editSubCategory({{$list->id}})" style="cursor:pointer;">
                                <i class="bi-pencil"></i>
                            </a> <br>
                        @endforeach
                    </div>
                @elseif($this->openSubCategoryInput=='1')
                    <div class="col-md-12">
                        Add or Edit {{Illuminate\Support\Str::limit($this->category_name,20) .'`s'}} Category 
                    </div>
                    <br>

                    <form wire:submit.prevent="addSubCategory({{$this->category_id}})">
                        <div class="col-md-11">
                            <!-- <label>&nbsp; &nbsp; </label> -->
                            <input type="text" wire:model="sub_category_name" class="form-control" placeholder="Add New Sub-Category...">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-secondary">
                            Save
                        </button>
                        <div wire:loading wire:submit="addCategory">
                            Please wait...
                        </div>
                        <a wire:click="resetSubCategory" class="text-primary" style="cursor: pointer;">
                            Reset
                        </a>
                    </form>
                @endif
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