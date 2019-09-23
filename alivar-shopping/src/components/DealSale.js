import React, {Component} from 'react';

class DealSale extends Component {
    constructor(props){
        super(props);

        this.state = {
            
        }
    }


    render(){

        let item = this.props.item;
        let index = this.props.index;

        return (
            <div className="row">
                <div className="col-xs-12">
                    <div className="deal-sale">
                        <div className="item-deal">
                            <div className="img-item">
                                <img src={item.imgdeal} />
                            </div>
                            <div className="content">
                                <div className="logo-item">
                                    <img src={item.logoshop} />
                                </div>
                                <div className="about-prd">
                                    <p className="name"> {item.namedeal} </p>
                                    <p className="price">
                                        <span className="old-price">
                                            {item.oldprice}
                                        <span className="unit"> đ </span>
                                        </span>
                                        <span className="new-price">
                                            {item.newprice}
                                        <span className="unit"> đ </span>
                                        </span>
                                    </p>
                                </div>
                                <div className="percent-sale">
                                    Giảm <span> {item.percentsale} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default DealSale;
