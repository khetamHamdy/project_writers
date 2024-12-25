<div id="modalWritersCreate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true" wire:ignore.self aria-live="assertive">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{ __('cp.add_writers') }}</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('cp.name_writer') }} </label>
                                <input type="text" class="form-control" wire:model.lazy="name" name="name">

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('cp.job_writer') }}</label>
                                <input type="text" class="form-control" wire:model.lazy="job" name="job">

                                @error('job')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{ __('cp.description_writer') }}</label>
                                <textarea class="form-control" wire:model.lazy="description" name="description"></textarea>

                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{-- <div class="col-md-6">
                            <div class="fileinputForm">
                                <label>{{ __('cp.image') }} </label>
                                <div class="fileinput-new thumbnail"
                                    onclick="document.getElementById('edit_image').click()" style="cursor:pointer">
                                    <img src="{{ url(asset('admin_assets/images/ChoosePhoto.png')) }}" id="editImage">
                                </div>
                                <div class="btn btn-change-img red"
                                    onclick="document.getElementById('edit_image').click()">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                                <input type="file" class="form-control" name="image" id="edit_image"
                                    wire:model="image" style="display:none">
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('cp.image') }}</label>
                                <input type="file" class="form-control" wire:model.lazy="image">

                            </div>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    @include('livewire.model.platforms')

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success"
                            wire:click="store_writers">{{ __('cp.add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
