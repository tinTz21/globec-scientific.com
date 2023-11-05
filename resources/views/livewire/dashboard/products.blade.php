<div class="container-fluid">
        {{-- The whole world belongs to you. --}}
    <div class="row justify-content-center">
        <div class="row bg-light" style="margin-top: 1em;">
            <div class="container-fluid" style="padding: 1em">
                <div class="row">
                    <div class="col-md-8">
                        <h3 style="color: #017C7A;">
                            Product Categories
                        </h3>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-outline-secondary rounded-pill" style="cursor: pointer;" aria-current="page" data-bs-toggle="modal" data-bs-target="#allBibleBooks"  wire:click="addCategory">
                               <i class="bi-files"></i>
                               Category 
                          </a>
                          @include('livewire.dashboard.model.category')
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('add-product')}}" class="btn btn-outline-secondary rounded-pill">
                            <i class="bi-cart"></i> Add Product
                        </a>
                    </div>
                </div>  
            </div> 





            <div class="table-responsive col-md-12">
                <table class="table" id="cvs" style="width:100%">
                <thead >
                <tr class="text-secondary">
                <th  style=" color: #707070 !important; "> Category Lists</th>
                <th  style=" color: #707070 !important; "> View</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                          <td data-label="Level" style=" color: #707070 !important; min-width: 10em;"> 
                            {{ Illuminate\Support\Str::limit($category->name, 30) }}

                          </td>
                          <td>
                            <a href="{{route('show-product',$category->id)}}" style="cursor: pointer;" aria-current="page" data-bs-toggle="modal" data-bs-target="#sub-category{{$category->id}}"  wire:click="openSubCategoryPopUp({{$category->id}})">
                                <i class="bi-eye" style="font-size: 2em; color: #017C7A;"></i>
                            </a>
                          </td>
                        </tr>
                        @include('livewire.dashboard.model.sub_category')
                    @endforeach
                </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>
