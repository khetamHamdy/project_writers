<div>

    @foreach ($platforms as $index => $platform)
        <div class="modal-header">
            <h4 class="modal-title">{{ __('cp.add_platforms') . ' ' . $index + 1 }}</h4>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>{{ __('cp.name_platform') }}</label>
                    <input type="text" class="form-control"
                        wire:model.lazy="platforms.{{ $index }}.name_platform">
                    @error('platforms.$index.name_platform')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>{{ __('cp.url_platform') }}</label>
                    <input type="text" class="form-control"
                        wire:model.lazy="platforms.{{ $index }}.url_platform">
                </div>
            
                @error("platforms.$index.url_platform")
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>{{ __('cp.image_platform') }}</label>
                    <input type="file" class="form-control"
                        wire:model.lazy="platforms.{{ $index }}.image_platform">
                </div>
                @error('platforms.$index .image_platform')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-1">
                <button type="button" wire:click="removePlatform({{ $index }})" class="btn btn-outline-danger">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
        </div>
    @endforeach

    <button type="button" wire:click="addPlatform" class="btn btn-light-success">
        {{ __('cp.add') }}
    </button>
</div>
