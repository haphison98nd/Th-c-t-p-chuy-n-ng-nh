import React, {Component} from 'react';


class Banner extends Component {
    constructor(props){
        super(props);

        this.state = {
           
        }
        
    }
     render(){
        
        return (
            <div className="row">
                <div className="col-xs-12">
                    <div className="banner-bt" >
                        <img src="images/image.png" />
                    </div>
                </div>
            </div>
        );
    }
}

export default Banner;
