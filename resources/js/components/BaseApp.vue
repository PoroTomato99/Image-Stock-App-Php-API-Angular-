<template>
    <div>
        <base-header></base-header>
        <upload-form-component></upload-form-component>
        <base-footer></base-footer>
    </div>
</template>

<script>
import BaseHeader from './BaseHeader.vue'
import BaseFooter from './BaseFooter.vue'
import UploadFormComponent from './UploadFormComponent.vue'

export default{
    components: { 
        BaseHeader,
        UploadFormComponent,
        BaseFooter
    },
    
}
</script>
