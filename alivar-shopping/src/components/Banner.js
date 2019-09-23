import React, {Component} from 'react';

class Banner extends Component {
    constructor(props){
        super(props);

        this.state = {
        }
    }


    render(){


        // console.log(items);

        return (
            <div className="banner-textrun">
                <div className="row">
                    <div className="col-xs-12">
                        <div className="text-run">
                            <marquee>
                                KHÁM PHÁ CÁC DEAL HOT NHẤT TRONG NGÀY
                                <i className="fas fa-fire" />
                                CẬP NHẬT LIÊN TỤC
                            </marquee>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-xs-12">
                        <div className="banner-slide owl-carousel">
                            <div className="item-banner">
                                <img src="images/Group 83.7.png" />
                            </div>
                            <div className="item-banner">
                                <img src="images/Group 83.7.png" />
                            </div>
                            <div className="item-banner">
                                <img src="images/Group 83.7.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Banner;
