class Alert {
    DEFAULT_DISTANCE_ALERT = 20;
    DEFAULT_TRANSITION_DELAY_SHOW_ERROR = 200;
    DEFAULT_TIME_REMOVE_ERROR = 1500;

    constructor(className = 'alert-error') {
        const alertsError = document.querySelectorAll(`.${className}`);

        this.errors = [ ...alertsError ];
    }

    init() {
        this.loadErrors();
    }

    loadErrors() {
        let top = 0;

        this.errors.forEach((error, index, errors) => {
            error.style.transitionDelay = `${index * this.DEFAULT_TRANSITION_DELAY_SHOW_ERROR}ms`;

            error.style.right = `${20}px`;
            error.style.transform = 'translateY(0)';
            error.style.top = `${top + this.DEFAULT_DISTANCE_ALERT}px`;

            top += error.clientHeight + this.DEFAULT_DISTANCE_ALERT;
            // console.log(error.clientHeight);
            error.onclick = () => this.clickError(error, index, errors);
            setTimeout(() => this.removeError(error, index), ((index + 1) * this.DEFAULT_TIME_REMOVE_ERROR));
        });
    }

    clickError(error, index, errors) {
        this.removeError(error, index);
    }

    removeError(error, index) {
        let top = 0;

        error.remove();
        this.errors = this.errors.filter(_ => _ !== error)
            .map(error => {
                error.style.top = `${top + this.DEFAULT_DISTANCE_ALERT}px`;

                top += error.clientHeight + this.DEFAULT_DISTANCE_ALERT;

                return error;
            });
    }
}
