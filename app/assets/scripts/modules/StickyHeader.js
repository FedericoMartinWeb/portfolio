import $ from 'jquery';
import waypoints from '../../../../node_modules/waypoints/lib/noframework.waypoints';
import smoothScroll from 'jquery-smooth-scroll';

class StickyHeader{
    constructor(){
        this.lazyImages = $('.lazyload');
        this.siteHeader = $('.site-header');
        this.headerTrigger = $('.large-hero__title');
        this.createHeaderWaypoint();
        this.pageSections = $('.page-section');
        this.headerLinks = $('.primary-nav a');
        this.createPageSectionWaypoints();
        this.addSmoothScrolling();
        this.refreshWaypoints();
    }
    
    refreshWaypoints(){
        this.lazyImages.on('load', function(){
           Waypoint.refreshAll(); 
        });
    }
    
    addSmoothScrolling(){
        this.headerLinks.smoothScroll();
    }
    
    createHeaderWaypoint(){
        var that = this;
        new Waypoint({
            //Trigger element, cuando llegas a ese punto se activa el waypoint
            element: this.headerTrigger[0],
            handler: function(){
                that.siteHeader.toggleClass('site-header--dark');
            }
        });
    }
    
    createPageSectionWaypoints(){
        var that = this;
        this.pageSections.each(function(){
            var currentPageSection = this;
            new Waypoint({
                element: currentPageSection,
                handler: function(direction){
                    if(direction == 'down'){
                        var matchingLink = currentPageSection.getAttribute('data-matching-link');
                        that.headerLinks.removeClass('is-current-link');
                        $(matchingLink).addClass('is-current-link');
                    }
                },
                offset: '18%'
            });
            
            new Waypoint({
                element: currentPageSection,
                handler: function(direction){
                    if(direction == 'up'){
                        var matchingLink = currentPageSection.getAttribute('data-matching-link');
                        that.headerLinks.removeClass('is-current-link');
                        $(matchingLink).addClass('is-current-link');
                    }
                },
                offset: '-40%'
            });
        });
    }
}

export default StickyHeader;