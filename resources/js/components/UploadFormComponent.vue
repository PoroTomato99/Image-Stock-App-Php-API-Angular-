
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Upload</div>
                    <div id="form-container" class="card-body">
                        <form id="submit-form" method="POST" action="/api/posts" class="form-group" enctype="multipart/form-data" ref="form">
                            <input type="hidden" name="_token" :value="csrf">

                            <label for="file">Select one image to insert:</label>
                            <input @change="onFileChange" class="form-control" type="file" name="file" style="height:100%" />
                            <small class="form-text text-muted">Only jpg, jpeg and png is accepted</small>
                        </form>
                        <button class="btn btn-block btn-success" type="button" v-on:click="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }
        // el : "#form-container",
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            filename: '',
            file: '',
            success: '',
          }),   
        methods : {
            onFileChange: function(e){
                //console.log(e.target.files[0]);
                this.filename = "Selected File: " + e.target.files[0].name;
                this.file = e.target.files[0];
            },
            submit: function(e) {
                e.preventDefault();
                let currentObj = this;
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    }
                }

                // form data
                let formData = new FormData();
                formData.append('file', this.file);

                // send upload request
                axios.post('/api/posts', formData, config)
                    .then(function (response) {
                        currentObj.success = response.data.success;
                        currentObj.filename = "";
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
            }
            // submit : function(e){
            //     let formData = new FormData()
            //     formData.append('photo', this.photo);
            //     console.log(formData)
            //     console.log(1)
            //     axios.post("/api/posts", formData);
            // }
            
        }
    }
</script>