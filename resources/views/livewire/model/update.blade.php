<div id="modalWritersEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true"
    wire:ignore.self aria-live="assertive">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{ __('cp.edit_writers') }}</h4>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('cp.name_writer') }}</label>
                                <input type="text" class="form-control" wire:model="name">

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('cp.job_writer') }}</label>
                                <input type="text" class="form-control" wire:model="job">

                                @error('job')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{ __('cp.description_writer') }}</label>
                                <textarea class="form-control" wire:model="description"></textarea>

                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="col-md-6">
                            <div class="fileinputForm">
                                <label>{{ __('cp.image') }} </label>
                                <div class="fileinput-new thumbnail"
                                    onclick="document.getElementById('edit_image').click()" style="cursor:pointer">
                                    <img src="{{ $image ? $image : url(asset('admin_assets/images/ChoosePhoto.png')) }}"
                                        id="editImage">
                                </div>
                                <div class="btn btn-change-img red"
                                    onclick="document.getElementById('edit_image').click()">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                                <input type="file" class="form-control" name="image" id="edit_image"
                                    wire:model.lazy="image" style="display:none">
                            </div>
                        </div> --}}

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('cp.image') .$image }} </label>
                                <input type="file" class="form-control" wire:model="image">
                            </div>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    @include('livewire.model.platforms')

                    <div class="modal-footer">
                        <button class="btn default" data-dismiss="modal"
                            aria-hidden="true">{{ __('cp.cancel') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('cp.edit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
