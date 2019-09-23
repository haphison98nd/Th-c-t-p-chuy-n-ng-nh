import React, {Component} from 'react';


class DetailNews extends Component {
    constructor(props){
        super(props);

        this.state = {
           
        }
        
    }
    render(){
        let itemChoose = this.props.itemChoose;

        console.log(itemChoose);
        return (
            <div className="container">
                <div className="row">
                    <div className="col-xs-12">
                        <div className="title-head">
                                {itemChoose.titlenew}
                            <p className="time">
                                STYLE Editor <span> . </span> <span> 13/02/2019 </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-xs-12">
                        <div className="content-new">
                            {itemChoose.content1}
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-xs-12">
                        <div className="img-new">
                            <img src={itemChoose.imgfull}/>                    
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-xs-12">
                        <div className="content-new">
                            {itemChoose.content1}
                        </div>    
                    </div>
                </div>
                <div className="row">
                    <div className="col-xs-12">
                        <div className="advertise">
                            <div className="img-item">
                                <a href="#">
                                <img src="images/image 3.png" />
                                </a>
                            </div>
                            <div className="content-item">
                                <span>
                                <a href="#">
                                <img src="images/ads1.png" />
                                </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-xs-12">
                        <div className="same-category">
                            <div className="item-same">
                                <div className="img-item">
                                    <a href="#">
                                    <img src="images/image 5.png" />
                                    </a>
                                </div>
                                <div className="title-item">
                                    <span className="title">
                                    ‘Chàng thơ’ Mr. Đàm và ‘nàng thơ’ Jolie Nguyễn giúp show diễn thăng hoa
                                    </span>
                                    <span className="category">
                                    <a href="#">
                                    THỜI TRANG, TIN THỜI TRANG
                                    </a>
                                    </span>
                                </div>
                            </div>
                            <div className="item-same">
                                <div className="img-item">
                                    <a href="#">
                                    <img src="images/image 5.png" />
                                    </a>
                                </div>
                                <div className="title-item">
                                    <span className="title">
                                    ‘Chàng thơ’ Mr. Đàm và ‘nàng thơ’ Jolie Nguyễn giúp show diễn thăng hoa
                                    </span>
                                    <span className="category">
                                    <a href="#">
                                    THỜI TRANG, TIN THỜI TRANG
                                    </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default DetailNews;
