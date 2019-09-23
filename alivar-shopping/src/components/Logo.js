import React, {Component} from 'react';

class Logo extends Component {
    constructor(props){
        super(props);

        this.state = {
        }
    }


    render(){


        // console.log(items);

        return (
            <div className="row">
                <div className="col-xs-12">
                    <div className="logo-shopping">
                        <img src="images/Group 90.png" />
                    </div>
                </div>
            </div>
        );
    }
}

export default Logo;
