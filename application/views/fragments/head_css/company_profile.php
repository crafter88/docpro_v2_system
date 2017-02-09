<style>
	body#document-body.flat-blue
	{
		background-color: #e9ebee !important;
	}
	div.side-body div.p-panel{
		background-color: #FFF;
	}
	div.container.main
	{
		border: 1px solid #d3d6db;
		height: 220px;
		padding: 0;
		margin-top: -10px;
	}
	div.logo
	{
		height: 170px;
		width: 170px;
		border-radius: 3px;
		padding: 3px;
		margin-top: 72px;
		border: 1px solid #b2b2b2;
		background-color: #FFF;
		z-index: 9999;
		cursor: hand;
		cursor: pointer;
	}
	div.logo img
	{
		margin: 0 auto;
		display: block;
	}
	div.menu-container
	{
		margin-top: 18px;
		padding: 0;
		margin-left: -1px;
	}
	div.menu
	{
		height: 43px;
		position: absolute;
		bottom: 0;
		border: 1px solid #d3d6db;
		border-radius: 0 0 3px 3px;
		width: 100.2%;
	}	
	div.menu-content
	{
		height: 100%;
		margin-left: 15%;
	}
	div.menu-content a
	{
		line-height: 3;
		font-size: 14px;
		font-weight: bold;
		color: #365899 !important;
		padding: 0 17px;
		border-right: 1px solid #e9eaed;
		height: 43px !important;
		display: inline-block;
		text-decoration: none;
	}
	div.menu-content a.active
	{
		color: #4b4f56 !important;
	}
	div.menu-content a:first-child
	{
		border-left: 1px solid #e9eaed;
	}
	div.menu-content a:first-child span
	{
		background-image: url('../assets/img/fb.png');
		background-repeat: no-repeat;
		background-size: auto;
		background-position: -217px -205px;
		bottom: -1px;
		height: 9px;
		margin-left: 12px;
		position: absolute;
		width: 17px;
		display: block;
	}
	span#p-company-name
	{
		font-size: 24px;
		position: absolute;
		bottom: 40px;
		margin-left: 15px;
		font-weight: 700;
	}
	button#p-update-info:hover
	{
		background-color: #e9ebee;
	}
	button#p-update-info
	{
		font-size: 24px;
		position: absolute;
		bottom: 40px;
		font-weight: 700;
		right: 10px;
		content: '';
		display: inline-block;
		height: 28px;
		outline: none;
		background-clip: padding-box;
		border-color: rgba(0, 0, 0, .4);
		line-height: 26px;
		padding: 0 10px;
		background-color: #f6f7f9;
		color: #4b4f56;
		border: 1px solid;
		border-radius: 2px;
		box-sizing: content-box;
		font-size: 12px;
		font-weight: bold;
		text-align: center;
		text-shadow: none;
		vertical-align: middle;
		cursor: pointer;
		word-wrap: break-word;
		white-space: nowrap;
	}
	div.content-panel
	{
		border: 1px solid;
		border-color: #e5e6e9 #dfe0e4 #d0d1d5;
		border-radius: 3px;
		min-height: 10px;
		padding: 10px 12px;
	}
	div.container.content
	{
		margin-top: 43px;
		background-color: transparent;
		padding-left: 0;
		padding-right: 0;
		min-height: 10px;
	}
	div.container.content:nth-child(3)
	{
		margin-top: 0;
		padding-top: 0;
	}
	div.header .icon-intro
	{
		background-image: url('../assets/img/fb_3.png');
		background-size: auto;
		background-repeat: no-repeat;
		display: inline-block;
		float: left;
		margin-left: 5px;
		color: #4b4f56;
		width: 24px;
		height: 24px;
		background-position: -16px 6px;
	}
	div.header .icon-globe
	{
		background-image: url('../assets/img/fb_1.png');
		background-size: auto;
		background-repeat: no-repeat;
		display: inline-block;
		float: left;
		margin-right: 5px;
		color: #4b4f56;
		width: 24px;
		height: 24px;
		background-position: 0 -22px;
	}
	div.contact-details span,
	div.company-details span
	{
		line-height: 24px;
	}
	div.body
	{
		margin-top: 10px;
	}
	div.body .icon-phone
	{
		background-image: url('../assets/img/fb_2.png');
		background-size: auto;
		background-repeat: no-repeat;
		display: inline-block;
		height: 16px;
		width: 16px;
		background-position: 0 -69px;
		vertical-align: middle;
	}
	div.body .icon-email
	{
		background-image: url('../assets/img/fb_1.png');
		background-size: auto;
		background-repeat: no-repeat;
		display: inline-block;
		height: 16px;
		width: 16px;
		background-position: -12px -199px;
		vertical-align: middle;
	}
	.body > div.mobile,
	.body > div.email
	{
		padding: 0;
	}
	div.body span
	{
		color: #1d2129;
		vertical-align: middle;
	}
	div.body > div
	{
		padding: 4px;
	}
	span.info-label
	{
		color: #333;
		line-height: 1.34;
		font-weight:  700;
		width: 165px !important;
		font-size: 12px;
	}
	.company-details table
	{
		width: 163%;
	}
	.company-details .body td:nth-child(1)
	{
		padding-right: 5px;
		width: 90px;
	}
	.company-details .body td:nth-child(2) span
	{
		color: #90949c;
		font-size: 12px;
	}
	.company-details .body td:nth-child(3) span
	{
		color: #365899;
		font-size: 12px;
		text-align: right;
		cursor: pointer;
		cursor: hand;
	}
	.company-details .body td:nth-child(3) span:hover
	{
		text-decoration: underline;
	}
	.company-details .body td:nth-child(3) span:hover .icon-pencil
	{
		display: block;
	}
	.contact-details table
	{
		width: 104%;
	}
	.contact-details .body td:nth-child(2) span
	{
		color: #365899;
		font-size: 12px;
		text-align: right;
		cursor: pointer;
		cursor: hand;
	}
	.contact-details .body td:nth-child(2) span:hover
	{
		text-decoration: underline;
	}
	.contact-details .body td:nth-child(2) span:hover .icon-pencil
	{
		display: block;
	}
	.icon-pencil
	{
		background-image: url('../assets/img/fb_3.png');
		background-position: 0 -34px;
		width: 18px;
		height: 18px;
		background-size: auto;
		background-repeat: no-repeat;
		position: absolute;
		right: 39px;
		margin-top: 2px;
		display: none;
	}
	.company-details .body td
	{
		word-wrap: break-word;
	}
	.company-details table
	{
		table-layout: fixed;
	}
	.contact-details
	{
		margin-top: 10px;
	}
	.container.content > .col-md-4
	{
		background-color: transparent;
		padding: 0;
	}
	div.company-location
	{
		width: 65.7%; 
		margin-left: 10px; 
		border: 1px solid;
		border-color: #e5e6e9 #dfe0e4 #d0d1d5;
		padding: 0;
	}
	div.company-location > .col-md-12
	{
		padding: 0 0 10px 0;
	}
	div.company-location > .col-md-12 > div.location-title > span:first-child
	{
		color: #4b4f56;
		font-size: 14px;
		line-height: 15px;
		font-weight: bold;
	}
	div.company-location > .col-md-12 > div.location-title
	{
		padding: 12px;
		background-color: #f6f7f9;
		border-bottom: 1px solid #e5e5e5;
		position: absolute;
		width: 100%;
	}
	div.company-location > .col-md-12 > div.location-title span.caret-loc:after
	{
		border-bottom: 8px solid #fff;
		border-left: 8px solid transparent;
		border-right: 8px solid transparent;
		content: '';
		left: 23px;
		position: absolute;
		bottom: -1px;
	}
	div.company-location > .col-md-12 > div.location-content
	{
		padding: 12px 12px 0 12px;
		margin-top: 43px;
	}
	.p-banner
	{
		background-color: #1d2129;
		color: #FFF;
	}
	div#update-photo
	{
	    position: absolute;
	    bottom: 4px;
	    z-index: 99999;
	    padding: 10px 0;
	    width: 96%;
	    height: 1px;
	    opacity: 0;
	    transition: height .13s ease-in;
	}
	div.logo:hover div#update-photo
	{
		opacity: 1;
		height: 52px;
	}
	div.logo:hover div#update-photo:after
	{
		background: rgba(6, 9, 10, 0.61);
	}
	div#update-photo a:hover
	{
		background: rgba(6, 9, 10, 0.91);
	}
	div#update-photo:after
	{
		background: rgba(6, 9, 10, 0.91);
		content: '';
		height: 101%;
		left: 0;
		position: absolute;
		right: 0;
		top: 0;
		transition: top .13s ease-out;
		z-index: -1;
	}
	div#update-photo a{
		color: #FFF;
		padding: 10px 12px 10px 35px;
		position: absolute;
		font-size: 12px;
		top: 0;
		font-weight: 600;
		text-decoration: none;
		transition: background .13s ease-out;
	}
	.icon-camera
	{
		background-image: url('../assets/img/fb_1.png');
		width: 26px;
		height: 21px;
		background-position: 0 0;
		bottom: 60%;
		opacity: .9;
		transform: scale(.75);
		background-size: auto;
		background-repeat: no-repeat;
		display: inline-block;
		transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
		left: 5px;
		margin-bottom: -15px;
		position: absolute;
		color: #FFF;
	}
</style>
<style>
   #map {
    height: 400px;
    width: 100%;
   }
</style>
