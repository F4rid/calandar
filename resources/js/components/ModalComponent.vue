<template>
    <transition name="modal">
        <div class="modal-mask" @click="close" v-show="show">
            <div class="modal-container" @click.stop>
                <div class="modal-header">
                    <span class="title">{{ title }}</span>
                    <span class="ion-close-circled" @click="close">
                        <ion-icon name="close-outline"></ion-icon>
                    </span>
                </div>
                <div class="body">
                    <slot></slot>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        props: ['show', 'title'],
        methods: {
            close: function () {
                this.$emit('close');
            }
        },
        mounted: function () {
            document.addEventListener("keydown", (e) => {
                if (this.show && e.keyCode == 27) {
                    this.close();
                }
            });
        }
    }
</script>

<style lang="scss">
    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        transition: opacity .3s ease;
    }

    .modal-container {
        width: 900px;
        margin: 40px auto 0;
        border-radius: 4px 4px 0 0 !important;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
        transition: all .3s ease;
    }

    .modal-container .body {
        padding: 10px
    }

    .modal-header {
        text-align: right;
        font-size: 13px;
        background-color: #4a5459 !important;
        padding: 14px 20px;
        border-radius: 4px 4px 0 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .modal-header .title {
        color: #fff;
        font-size: 16px
    }

    .modal-header .ion-close-circled {
        display: flex;
        align-items: center;

        ion-icon{
            color: #fff;
            font-size: 28px;
            cursor: pointer
        }

    }

    .modal-body {
        margin: 0 0;
    }

    .modal-enter {
        opacity: 0;
    }

    .modal-leave-active {
        opacity: 0;
    }

    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>
