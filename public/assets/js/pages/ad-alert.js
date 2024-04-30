
$(".bs-message").on("click", function() {
    Swal.fire('Anyone can use a computer');
});

$('.bs-tit-txt').on('click', function() {
    Swal.fire({
        title: 'The Internet?',
        text: 'That thing is still around?',
        icon: 'question'
    });
});

$('.bs-error-icon').on('click', function() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href>Why do I have this issue?</a>'
    });
});

$('.bs-long-content').on('click', function() {
    Swal.fire({
        imageUrl: 'https://placeholder.pics/svg/300x1500',
        imageHeight: 1500,
        imageAlt: 'A tall image'
    });
});

$('.bs-cust-html').on('click', function() {
    Swal.fire({
        title: '<strong>HTML <u>example</u></strong>',
        icon: 'info',
        html: 'You can use <b>bold text</b>, ' +
            '<a href="//sweetalert2.github.io">links</a> ' +
            'and other HTML tags',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
        cancelButtonAriaLabel: 'Thumbs down'
    });
});


$('.bs-tre-button').on('click', function() {
    Swal.fire({
        title: 'Do you want to save the changes?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Save',
        denyButtonText: "Don't save",
    }).then(function(result) {
        if (result.isConfirmed) {
            Swal.fire('Saved!', '', 'success');
        } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info');
        }
    });
});


$('.bs-cust-position').on('click', function() {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
    });
});


$('.bs-cust-anim').on('click', function() {
    Swal.fire({
        title: 'Custom animation with Animate.css',
        showClass: {
            popup: 'animated fadeInDown'
        },
        hideClass: {
            popup: 'animated fadeOutUp'
        }
    });
});


$('.bs-pass-para').on('click', function() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then(function(result) {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            );
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
            );
        }
    });
});

$('.bs-cust-img').on('click', function() {
    Swal.fire({
        title: 'Sweet!',
        text: 'Modal with a custom image.',
        imageUrl: 'https://unsplash.it/400/200',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
    });
});

$('.bs-cust-full').on('click', function() {
    Swal.fire({
        title: 'Custom width, padding, background.',
        width: 600,
        padding: '3em',
        background: '#fff url(assets/images/gallery-grid/img-grd-gal-2.jpg)',
        backdrop: `
            rgba(0,0,123,0.4)
            url("../assets/images/profile/bg-2.html")
            left top
            no-repeat
        `
    });
});

$('.bs-auto-close').on('click', function() {
    let timerInterval;
    Swal.fire({
        title: 'Auto close alert!',
        html: 'I will close in <b></b> milliseconds.',
        timer: 2000,
        timerProgressBar: true,
        willOpen: function() {
            Swal.showLoading();
            timerInterval = setInterval(function() {
                const content = Swal.getContent();
                if (content) {
                    const b = content.querySelector('b');
                    if (b) {
                        b.textContent = Swal.getTimerLeft();
                    }
                }
            }, 100);
        },
        onClose: function() {
            clearInterval(timerInterval);
        }
    }).then(function(result) {
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer');
        }
    });
});

$('.bs-rtl-lang').on('click', function() {
    Swal.fire({
        title: 'هل تريد الاستمرار؟',
        icon: 'question',
        iconHtml: '؟',
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
        showCancelButton: true,
        showCloseButton: true
    });
});

$('.bs-ajex-req').on('click', function() {
    Swal.fire({
        title: 'Submit your Github username',
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Look up',
        showLoaderOnConfirm: true,
        preConfirm: function(login) {
            return $.ajax({
                url: '//api.github.com/users/' + login,
                method: 'GET',
                dataType: 'json'
            })
            .done(function(response) {
                return response;
            })
            .fail(function(xhr, status, error) {
                Swal.showValidationMessage(
                    'Request failed: ' + error
                );
            });
        },
        allowOutsideClick: function() {
            return !Swal.isLoading();
        }
    }).then(function(result) {
        if (result.isConfirmed) {
            Swal.fire({
                title: result.value.login + `'s avatar`,
                imageUrl: result.value.avatar_url
            });
        }
    });
});

$('.bs-mixin-exp').on('click', function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: function(toast) {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        }
    });
    Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
    });
});


$('.bs-success-ico').on('click', function() {
    Swal.fire({
        icon: 'success',
        title: 'Success modal'
    });
});


$('.bs-error-ico').on('click', function() {
    Swal.fire({
        icon: 'error',
        title: 'Error modal'
    });
});

$('.bs-warning-ico').on('click', function() {
    Swal.fire({
        icon: 'warning',
        title: 'Warning modal'
    });
});

$('.bs-info-ico').on('click', function() {
    Swal.fire({
        icon: 'info',
        title: 'Info modal'
    });
});

$('.bs-question-ico').on('click', function() {
    Swal.fire({
        icon: 'question',
        title: 'Question modal'
    });
});

$('.bs-text-input').on('click', function() {
    (async () => {
        const ipAPI = '//api.ipify.org?format=json';
        const inputValue = await fetch(ipAPI)
            .then(response => response.json())
            .then(data => data.ip);
        const { value: ipAddress } = await Swal.fire({
            title: 'Enter your IP address',
            input: 'text',
            inputValue: inputValue,
            showCancelButton: true,
            inputValidator: (value) => {
                if (!value) {
                    return 'You need to write something!';
                }
            }
        });
        if (ipAddress) {
            Swal.fire(`Your IP address is ${ipAddress}`);
        }
    })();
});


$('.bs-email-input').on('click', function() {
    (async () => {
        const { value: email } = await Swal.fire({
            title: 'Input email address',
            input: 'email',
            inputPlaceholder: 'Enter your email address'
        });

        if (email) {
            Swal.fire(`Entered email: ${email}`);
        }
    })();
});


$('.bs-url-input').on('click', function() {
    (async () => {
        const { value: url } = await Swal.fire({
            input: 'url',
            inputPlaceholder: 'Enter the URL'
        });

        if (url) {
            Swal.fire(`Entered URL: ${url}`);
        }
    })();
});


$('.bs-password-input').on('click', function() {
    (async () => {
        const { value: password } = await Swal.fire({
            title: 'Enter your password',
            input: 'password',
            inputPlaceholder: 'Enter your password',
            inputAttributes: {
                maxlength: 10,
                autocapitalize: 'off',
                autocorrect: 'off'
            }
        });

        if (password) {
            Swal.fire(`Entered password: ${password}`);
        }
    })();
});


$('.bs-textarea-input').on('click', function() {
    (async () => {
        const { value: text } = await Swal.fire({
            input: 'textarea',
            inputPlaceholder: 'Type your message here...',
            inputAttributes: {
                'aria-label': 'Type your message here'
            },
            showCancelButton: true
        });

        if (text) {
            Swal.fire(text);
        }
    })();
});


$('.bs-select-input').on('click', function() {
    (async () => {
        const { value: fruit } = await Swal.fire({
            title: 'Select field validation',
            input: 'select',
            inputOptions: {
                'Fruits': {
                    apples: 'Apples',
                    bananas: 'Bananas',
                    grapes: 'Grapes',
                    oranges: 'Oranges'
                },
                'Vegetables': {
                    potato: 'Potato',
                    broccoli: 'Broccoli',
                    carrot: 'Carrot'
                },
                'icecream': 'Ice cream'
            },
            inputPlaceholder: 'Select a fruit',
            showCancelButton: true,
            inputValidator: (value) => {
                return new Promise((resolve) => {
                    if (value === 'oranges') {
                        resolve();
                    } else {
                        resolve('You need to select oranges :)');
                    }
                });
            }
        });

        if (fruit) {
            Swal.fire(`You selected: ` + fruit);
        }
    })();
});

$('.bs-radio-input').on('click', function() {
    (async () => {
        const inputOptions = new Promise((resolve) => {
            setTimeout(() => {
                resolve({
                    '#ff0000': 'Red',
                    '#00ff00': 'Green',
                    '#0000ff': 'Blue'
                });
            }, 1000);
        });

        const { value: color } = await Swal.fire({
            title: 'Select color',
            input: 'radio',
            inputOptions: await inputOptions,
            inputValidator: (value) => {
                if (!value) {
                    return 'You need to choose something!';
                }
            }
        });

        if (color) {
            Swal.fire({
                html: `You selected: ` + color
            });
        }
    })();
});

$('.bs-checkbox-input').on('click', function() {
    (async () => {
        const { value: accept } = await Swal.fire({
            title: 'Terms and conditions',
            input: 'checkbox',
            inputValue: 1,
            inputPlaceholder: 'I agree with the terms and conditions',
            confirmButtonText: 'Continue<i class="fa fa-arrow-right"></i>',
            inputValidator: (result) => {
                return !result && 'You need to agree with T&C';
            }
        });

        if (accept) {
            Swal.fire('You agreed with T&C :)');
        }
    })();
});

$('.bs-file-input').on('click', function() {
    (async () => {
        const { value: file } = await Swal.fire({
            title: 'Select image',
            input: 'file',
            inputAttributes: {
                'accept': 'image/*',
                'aria-label': 'Upload your profile picture'
            }
        });

        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                Swal.fire({
                    title: 'Your uploaded picture',
                    imageUrl: e.target.result,
                    imageAlt: 'The uploaded picture'
                });
            };
            reader.readAsDataURL(file);
        }
    })();
});

$('.bs-range-input').on('click', function() {
    (async () => {
        Swal.fire({
            title: 'How old are you?',
            icon: 'question',
            input: 'range',
            inputAttributes: {
                min: 8,
                max: 120,
                step: 1
            },
            inputValue: 25
        });
    })();
});

$('.bs-multiple-input').on('click', function() {
    (async () => {
        const { value: formValues } = await Swal.fire({
            title: 'Multiple inputs',
            html: '<input id="swal-input1" class="swal2-input">' +
                  '<input id="swal-input2" class="swal2-input">',
            focusConfirm: false,
            preConfirm: () => {
                return [
                    $('#swal-input1').val(),
                    $('#swal-input2').val()
                ];
            }
        });
        if (formValues) {
            Swal.fire(JSON.stringify(formValues));
        }
    })();
});
