
// tables

const consts = {
    // Tables Navbar
    'navbar':{
        'menu': document.querySelector('#mobile-menu'),
        'links': document.querySelector('.navbar-menu'),

        // active
        'ul': document.querySelector('.navbar-menu'),
        'active': document.querySelectorAll('.navbar-item a'),
    },

    // Password
    'change':{
        'pass': document.querySelector('#password'),
        'icon': document.querySelector('#eye'),
        'eye': document.querySelector('#icon-pass'),
        'check': document.querySelector('#check'),
        'main': document.querySelector('.main-form-r'),
        'state': false,
    },
};

// active function

consts['navbar']['active'].forEach(isActive => {
    isActive.addEventListener('click', function(){
        consts['navbar']['ul'].querySelector('.active').classList.remove('active')
        isActive.classList.add('active')
    })
})


// click navbar

consts['navbar']['menu'].addEventListener('click',
    () => {
        consts['navbar']['menu'].classList.toggle('is-active')
        consts['navbar']['links'].classList.toggle('active')
    }
);

// Eye

consts['change']['eye'].addEventListener('click', 
    () => {
        if(consts['change']['state']){
            consts['change']['pass'].setAttribute('type', 'password');
            if(consts['change']['main']){
                consts['change']['check'].setAttribute('type', 'password');
                consts['change']['eye'].style = 'color: #7a797e; border-bottom: none;';
            };
            consts['change']['state'] = false;
            consts['change']['icon'].style.color = '#7a797e';
        }else{
            consts['change']['pass'].setAttribute('type', 'text');
            if(consts['change']['main']){
                consts['change']['check'].setAttribute('type', 'text');
                consts['change']['eye'].style = 'color: #d7d7d7; border-bottom: 1px solid #698dc3;';
            };
            consts['change']['icon'].style.color = '#d7d7d7';
            consts['change']['state'] = true;
        };
    }
);