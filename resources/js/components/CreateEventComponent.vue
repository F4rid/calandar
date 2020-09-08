<template>
    <modal-component :show="show" title="افزودن رویداد جدید" @close="show = false">
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="name" class="col-form-label">نام مراجعه کننده:</label>
                    <input type="text" class="form-control" id="name" v-model="form.name">
                </div>
                <div class="form-group">
                    <label for="mobile" class="col-form-label">شماره تماس:</label>
                    <input type="text" class="form-control" id="mobile" v-model="form.mobile">
                </div>
                <div class="form-group">
                    <label for="document_id" class="col-form-label">شماره پرونده:</label>
                    <input type="text" class="form-control" id="document_id" v-model="form.document_id">
                </div>
                <div class="form-group">
                    <label for="time" class="col-form-label">زمان مراجعه بعدی:</label>
                    <input type="text" class="form-control" id="time" v-model="form.time">
                </div>
            </form>
        </div>
    </modal-component>
</template>
<script>
export default {
    data() {
        return {
            show: false,
            form: {
                name: '',
                mobile: '',
                document_id: '',
                time: ''
            }
        }
    },

    methods: {
        showCreateEventModal() {
            this.show = true
        },

        create() {
            axios.post('/events', this.form).then(response => {

            })
        }
    }
}

</script>
