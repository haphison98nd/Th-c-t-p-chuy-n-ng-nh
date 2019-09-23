import React, {Component} from 'react';

class SortListDeal extends Component {
    constructor(props){
        super(props);

        this.state = {

        }
    }


    render(){

        return (
            <div className="row">
                <div className="col-xs-12">
                    <div className="sort">
                        <div className="sort-cover">
                            <select className="custom-select" style={{width: '100px'}}>
                            <option> Loại sản phẩm  </option>
                            <option> Điện thoại </option>
                            <option> Máy tính </option>
                            <option> Khác </option>
                            </select>
                            <select className="custom-select">
                                <option> Mức giá </option>
                                <option> &lt; 2 tr </option>
                                <option> 2-5 tr </option>
                                <option> &gt; 5 tr </option>
                            </select>
                            <select className="custom-select">
                                <option> Mức giá </option>
                                <option> &lt; 2 tr </option>
                                <option> 2-5 tr </option>
                                <option> &gt; 5 tr </option>
                            </select>
                            <select className="custom-select">
                                <option> Tỉ lệ chiết khấu </option>
                                <option> 5% </option>
                                <option> 10% </option>
                                <option> 20% </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default SortListDeal;
