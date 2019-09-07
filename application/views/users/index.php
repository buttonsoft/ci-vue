<ul class="nav justify-content-center bg-dark text-light">
    <li class="nav-item">
        <a href="<?= base_url('user'); ?>" class="nav-link">CodeIgniter + VueJS <img src="<?= base_url('assets/'); ?>img/civue.png" alt="logo" width="60" height="70"></a>
    </li>
</ul>
<div id="app">
    <div class="container">
        <div class="row">

            <transition enter-active-class="animated fadeInLeft" leave-active-class="animated fadeOutRight">
                <div class="notification is-success text-center px-5 top-middle" v-if="successMSG" @click="successMSG = false">
                    {{ successMSG }}
                </div>
            </transition>

        </div>
    </div>
</div>