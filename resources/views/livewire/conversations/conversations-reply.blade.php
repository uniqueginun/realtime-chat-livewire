<form x-data="submitReplyForm()" action="#" wire:submit.prevent="reply">
    <div class="form-group mb-0">
        <textarea rows="1" wire:model="body" x-on:keydown.enter="submit()" placeholder="reply..." class="form-control"></textarea>
    </div>
    <button type="submit" x-ref="submitButton" class="sr-only">Send</button>
</form>

<script>
    function submitReplyForm() {
        return {
            submit() {
                this.$refs.submitButton.click();
            }
        }
    }
</script>