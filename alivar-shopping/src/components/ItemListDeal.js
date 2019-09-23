import React, {Component} from 'react';

class ItemListDeal extends Component {
    constructor(props){
        super(props);

        this.state = {

        }
    }


    render(){

        return (
            <div className="row">
                <div className="col-xs-12">
                    <div className="deal-sale list-prd">
                        <div className="item-product item-deal">
                            <div className="content">
                                <div className="logo-item">
                                    <img src="images/Group 731.png" />
                                </div>
                                <div className="about-prd">
                                    <p className="name"> Samsung A50 </p>
                                    <p className="price">
                                        <span className="old-price">
                                        6.990.000
                                        <span className="unit"> đ </span>
                                        </span>
                                        <span className="new-price">
                                        5.990.000
                                        <span className="unit"> đ </span>
                                        </span>
                                    </p>
                                </div>
                                <div className="percent-sale">
                                    Giảm <span> 15% </span>
                                </div>
                                <div className="see-now">
                                    <button>
                                    Xem ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default ItemListDeal;
