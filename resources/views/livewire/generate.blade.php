<div class="flex flex-col gap-4 w-full max-w-xs">
    <h2 class="text-3xl">QR Code Image Generator</h2>
    <div class="form-control w-full">
        <label class="label">
            <span class="label-text">Name</span>
        </label>
        <input type="text" placeholder="John" class="input input-bordered w-full" wire:model="name"
            wire:input="inputResetValidation" />
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
            <span class="label-text">Github</span>
        </label>
        <input type="text" placeholder="https://github.com/jhon" class="input input-bordered w-full"
            wire:input="inputResetValidation" wire:model="github" />
        @error('github')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-control w-full">
        <label class="label">
            <span class="label-text">Linkedin</span>
        </label>
        <input type="text" placeholder="https://linkedin.com/in/jhon" class="input input-bordered w-full"
            wire:input="inputResetValidation" wire:model="linkedin" />
        @error('linkedin')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <button class="btn btn-outline mt-8" wire:click="generateQRCode" wire:loading.class="loading"
        wire:loading.attr="disabled">Generate Image</button>
    <img src="{{ $image }}" alt="">
</div>
