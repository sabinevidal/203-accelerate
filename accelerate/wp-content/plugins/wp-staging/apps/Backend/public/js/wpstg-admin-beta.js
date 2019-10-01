jQuery(document).ready(function($){
    $(".wpstg_hide_beta").click(function(e) {
        e.preventDefault();

        WPStaging.ajax(
            {action: "wpstg_hide_beta"},
            function(response)
            {
                if (true === response)
                {
                    $(".wpstg_beta_notice").slideUp("slow");
                    return true;
                }

                alert(
                    "Unexpected message received. This might mean the data was not saved " +
                    "and you might see this message again"
                );
            }
        );
    })
});