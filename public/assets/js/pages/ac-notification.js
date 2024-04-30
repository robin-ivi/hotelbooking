$(document).ready(function() {
    $("#btn-default").click(function() {
        notifier.show('Hello!', 'I am a default notification.', '', '', 0);
    });
    $("#btn-info").click(function() {
        notifier.show('Reminder!', 'You have a meeting at 10:30 AM.', 'info', '', 0);
    });
    $("#btn-success").click(function() {
        notifier.show('Well Done!', 'You just submit your resume successfully.', 'success', '', 0);
    });
    $("#btn-warning").click(function() {
        notifier.show('Warning!', 'The data presented here can be changed.', 'warning', '', 0);
    });
    $("#btn-danger").click(function() {
        notifier.show('Sorry!', 'Could not complete your transaction.', 'danger', '', 0);
    });

    $("#btn-default-i").click(function() {
        notifier.show('Default!', 'I am a default notification.', '', '../assets/images/notification/clock-48.png', 0);
    });
    $("#btn-info-i").click(function() {
        notifier.show('Reminder!', 'You have a meeting at 10:30 AM.', 'info', '../assets/images/notification/survey-48.png', 0);
    });
    $("#btn-success-i").click(function() {
        notifier.show('Well Done!', 'You just submit your resume successfully.', 'success', '../assets/images/notification/ok-48.png', 0);
    });
    $("#btn-warning-i").click(function() {
        notifier.show('Warning!', 'The data presented here can be changed.', 'warning', '../assets/images/notification/medium_priority-48.png', 0);
    });
    $("#btn-danger-i").click(function() {
        notifier.show('Sorry!', 'Could not complete your transaction.', 'danger', '../assets/images/notification/high_priority-48.png', 0);
    });

    $("#btn-default-ac").click(function() {
        notifier.show('Default!', 'I am a default notification.', '', '../assets/images/notification/clock-48.png', 4000);
    });
    $("#btn-info-ac").click(function() {
        notifier.show('Reminder!', 'You have a meeting at 10:30 AM.', 'info', '../assets/images/notification/survey-48.png', 4000);
    });
    $("#btn-success-ac").click(function() {
        notifier.show('Well Done!', 'You just submit your resume successfully.', 'success', '../assets/images/notification/ok-48.png', 4000);
    });
    $("#btn-warning-ac").click(function() {
        notifier.show('Warning!', 'The data presented here can be changed.', 'warning', '../assets/images/notification/medium_priority-48.png', 4000);
    });
    $("#btn-danger-ac").click(function() {
        notifier.show('Sorry!', 'Could not complete your transaction.', 'danger', '../assets/images/notification/high_priority-48.png', 4000);
    });

    var notificationId;

    var showNotification = function() {
        notificationId = notifier.show('Reminder!', 'You have a meeting at 10:30 AM.', 'info', '../assets/images/notification/survey-48.png', 4000);
    };

    var hideNotification = function() {
        notifier.hide(notificationId);
    };

    $("#btn-nt-show").click(showNotification);
    $("#btn-nt-hide").click(hideNotification);
});
