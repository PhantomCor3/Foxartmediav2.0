.cursor
    .cursor_point
    .cursor_outer
.portfolio
    .portfolio_home
        %div{:style => 'position: fixed; z-index: -99; width: 2320px; height: 180%; left: 0;top: -38%;'}
            <iframe frameborder="0" height="100%" width="100%" src="https://youtube.com/embed/tz8Puc4W5BM?autoplay=1&controls=0&showinfo=0&autohide=1&mute=1"></iframe>
        .portfolio_home__header
            .hamburger.trigger
                -(1..3).each do
                    .hamburger_part
        .portfolio_home__title
            .logo
                %img.first{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/clogotemp.png'}
                %img.second{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/clogotemp2.png'}
                .page_portfolio
                    .portfolio_home__header
                        .logoMain   
                            %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/cagencylogo.png'}
                        .nav
                            %ul
                                %li.active.trigger Our work
                                %li.trigger Our services
                                %li.trigger About us
                                %li.trigger Contact us
                        .number.black 0161 345 3464
                        .hamburger.black.trigger
                            -(1..3).each do
                                .hamburger_part
                    .slider_note
                        Drag through our work
                    .portfolio_home__work
                        .portfolio_home__header.work
                            .back
                                
                                %img.trigger{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowDown.png'}
                            .logoMain   
                                %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/slogowhite.png'}
                            .nav
                                %ul
                                    %li.active.trigger Our work
                                    %li.trigger Our services
                                    %li.trigger About us
                                    %li.trigger Contact us
                            .number.white 0161 345 3464
                            .hamburger.white.trigger
                                -(1..3).each do
                                    .hamburger_part
                        .slideClone
                            .title.f
                                #{'.01'} 
                                %br
                                My Protein
                            .image
                                %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/fud.png', :draggable => 'false'}
                                .overlay
                                .cats ADVERTISING   DESIGN   DIGITAL
                                .title  My protein rebrand and digital campaign
                            
                        .slideClone
                            .title.f
                                #{'.02'} 
                                %br
                                Nike Air Max
                            .image
                                %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/nike.png', :draggable => 'false'}
                                .overlay
                                .cats ADVERTISING   DESIGN   DIGITAL   STRATEGY
                                .title  Nike Air max video campaign 2017
                        .slideClone
                            .title.f
                                #{'.03'} 
                                %br
                                Apple Watch
                            .image
                                %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/rpo.jpg', :draggable => 'false'}
                                .overlay
                                .cats ADVERTISING   DIGITAL   STRATEGY
                                .title The new Apple Watch digital campaign 2019
                        .slideClone
                            .title.f
                                #{'.04'} 
                                %br
                                Jade Teriyaki
                            .image
                                %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/orangetyhing.png', :draggable => 'false'}
                                .overlay
                                .cats ADVERTISING   DESIGN   DIGITAL   STRATEGY
                                .title Another agency did this campaign, not us
                        %img.scroll{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowDown.png'}
                    .portfolio_home__slider
                        .slider_inner
                            .slider_inner__slide
                                .title 
                                    #{'.01'} 
                                    %br
                                    My Protein
                                .image
                                    %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/fud.png', :draggable => 'false'}
                                    .overlay
                                    .cats ADVERTISING   DESIGN   DIGITAL
                                    .title My protein rebrand and digital campaign
                                    .button 
                                        View case study
                                        %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowbblakc.png'}
                            .slider_inner__slide
                                .title 
                                    #{'.02'} 
                                    %br
                                    Nike Air Max
                                .image
                                    %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/nike.png', :draggable => 'false'}
                                    .overlay
                                    .cats ADVERTISING   DESIGN   DIGITAL   STRATEGY
                                    .title Nike Air max video campaign 2017
                                    .button 
                                        View case study
                                        %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowbblakc.png'}
                            .slider_inner__slide
                                .title 
                                    #{'.03'} 
                                    %br
                                    Apple Watch
                                .image
                                    %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/rpo.jpg', :draggable => 'false'}
                                    .overlay
                                    .cats ADVERTISING   DIGITAL   STRATEGY
                                    .title The new Apple Watch digital campaign 2019
                                    .button 
                                        View case study
                                        %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowbblakc.png'}
                            .slider_inner__slide
                                .title 
                                    #{'.04'} 
                                    %br
                                    Jade Teriyaki
                                .image
                                    %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/orangetyhing.png', :draggable => 'false'}
                                    .overlay
                                    .cats ADVERTISING   DESIGN   DIGITAL   STRATEGY
                                    .title Another agency did this campaign, not us
                                    .button 
                                        View case study
                                        %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowbblakc.png'}
                
            %hr
            %h1 
                We are an Independent 
                %span Creative Advertising 
                &amp; 
                %span Branding Agency
            %img.trigger{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/arrowDown.png'}           

