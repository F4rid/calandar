<template>
    <div>
        <div id='calendar'></div>
        <create-event-component ref="createEventComponent"></create-event-component>
    </div>
</template>
<script>
export default {
    data() {
        return {
            events: []
        }
    },

    methods: {
        fetch() {
            axios.get('/events').then(response => {
                console.log(response);
            });
        },

        renderEvent() {
            $('#calendar').fullCalendar('renderEvent', eventData, true);
            $('#calendar').fullCalendar('unselect');
        }
    },

    created() {
        this.fetch();

        let self = this

        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                lang: 'fa',
                isJalaali: true,
                isRTL: true,
                defaultDate: moment().format(),
                editable: true,
                eventLimit: true,
                selectable: true,
                selectHelper: true,
                events: self.events,
                eventClick: function(event) {
                    // opens events in a popup window
                    window.open(event.url, 'gcalevent', 'width=700,height=600');
                    return false;
                },
                select: function(start, end) {
                    self.$refs.createEventComponent.showCreateEventModal()
                },
            });
        })
    }
}

</script>

<style>

    body {
        margin: 40px 10px;
        padding: 0;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

</style>
